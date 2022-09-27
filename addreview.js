let locals = [
    'Baleno',
    'Rio',
    'Bruce',
    'Shahd',
    'Tata',
    'Maxim',
    'Bonjour'
]

for(let i=0; i<locals.length; i++){
    localsEntry = locals[i]
    let selectLocal = $("#resurants14")

    let lineLocal = document.createElement('option')
    lineLocal.classList.add("resturant-line")
    lineLocal.value = localsEntry
    let listLineHtml = `
    ${localsEntry}`
    lineLocal.innerHTML = listLineHtml
    selectLocal.append(lineLocal)


    //let returantsa = selectLocal[$('#resurants14')]
    //let resturntSelected = returantsa[$('#1resturnat')]
    //let monee = selectLocal.text(localsEntry)
    // let conshar = $('#resurants14')
    // const newLocal = 'div'
    // conshar.create(newLocal)
    // conshar.append(localsEntry)
     console.log(lineLocal)
}