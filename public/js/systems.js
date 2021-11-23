var totalPrice = parseInt(document.getElementById('totalInput').value)

function calculatePrice(mealPrice) {
    totalPrice += mealPrice
    document.getElementById('totalInput').value = parseInt(totalPrice)
}

function removeElementFromInput(e) {
    console.log(e.getAttribute('checked'))

    let mealId = e.parentElement.parentElement.parentElement.getElementsByTagName('td')[1]
    let mealPrice = e.parentElement.parentElement.parentElement.getElementsByTagName('td')[3]
    let chosenMeals = document.getElementById('chosenMeals')

    $('#chosenMeals').children('#' + mealId.innerText).remove()
    calculatePrice(parseInt(-mealPrice.innerText))
    document.getElementById('quantityInput').value = parseInt(document.getElementById('quantityInput').value) - 1
}

function addElementIntoInput(e) {
    console.log(e.getAttribute('checked'))

    let mealId = e.parentElement.parentElement.parentElement.getElementsByTagName('td')[1]
    let mealPrice = e.parentElement.parentElement.parentElement.getElementsByTagName('td')[3]
    let chosenMeals = document.getElementById('chosenMeals')
    let inputElement = document.createElement('input')

    inputElement.setAttribute('type', 'hidden')
    inputElement.setAttribute('name', 'orders[]')
    inputElement.id = mealId.innerText
    inputElement.value = mealId.innerText

    chosenMeals.appendChild(inputElement)
    calculatePrice(parseInt(mealPrice.innerText))
    document.getElementById('quantityInput').value = parseInt(document.getElementById('quantityInput').value) + 1
}

function checkInput(e) {
    if (e.hasAttribute('checked')) {
        e.removeAttribute('checked')
        removeElementFromInput(e)
    } else {
        e.setAttribute('checked', 'checked')
        addElementIntoInput(e)
    }
}