window.addEventListener('DOMContentLoaded', () => {
    const search = document.querySelector('#search')
    const tableContainer = document.querySelector('#results tbody')
    const resultsContainer = document.querySelector('#resultsContainer')
    const errorsContainer = document.querySelector('.errors-container')
    let search_criteria = ''
    if (search) {
        search.addEventListener('input', event => {
            search_criteria = event.target.value.toUpperCase()
            showResults()
        })
    }
    //enviar peticion usando fecth
    const searchData = async () => {
        let searchData = new FormData()
        searchData.append('search_criteria', search_criteria)
        try {
            const response = await fetch('busqueda.php', {
                method: 'POST',
                body: searchData
            })
            return response.json()
        } catch (error) {
            alert(`${'Hubo un errorcito'}${error.message}`)
            console.log(error)
        }
    }


    //funcion para mostrar los datos
    const showResults = () => {
        searchData()
        .then(dataResults => {
            console.log(dataResults)
            tableContainer.innerHTML=''
            if(typeof dataResults.data!=='undefined' && !dataResults.data){
resultsContainer.style.display='block'
errorsContainer.querySelector('p').innerHTML=`
NO HAY RESULTADOS: <span class="bold">${search_criteria}</span>`
resultsContainer.style.display='none'
            }else{
resultsContainer.style.display='block'
errorsContainer.style.display='none'
for(const producto of dataResults){
    const row =document.createElement('tr')
    row.innerHTML=`
<td>${producto.codBarra.toUpperCase().replace(search_criteria,'<span class="bold">$&</span>')}</td>
<td>${producto.bodega}</td>
<td>${producto.pasillo}</td>
<td>${producto.nombre}</td>
    `
tableContainer.appendChild(row)
}

            }
        })
    }
})