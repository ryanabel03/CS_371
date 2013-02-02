used = []
slots = []
images = ["daphne", "fred", "scooby", "shaggy", "velma"]
clickCount = 0
firstCellClicked = null

function generateRandoms() {
  count = 0

  //Freebie
  slots[Math.floor(Math.random() * 9)] = 100

  while(count < 4) {
    number = Math.floor(Math.random() * 4)
    if(used.indexOf(number) == -1) {
      used.push(number)
      insertRandomly(number)
      count++;
    }
  }
  generateTable()
}

function insertRandomly(number) {
  while(true) {

    insertAt1 = Math.floor(Math.random() * 9)
    insertAt2 = Math.floor(Math.random() * 9)

    if(slots[insertAt1] == null && slots[insertAt2] == null && insertAt1 != insertAt2) {
      slots[insertAt1] = number
      slots[insertAt2] = number
      break
    }
  }
}

function generateTable() {
  cells = document.getElementsByTagName("td")
  count = 0

  while(count < 9) {
    console.log("setting cell ", count, " to ", slots[count])
    cells[count].value = slots[count]
    count++
  }
}

function determineMatch(e) {
  clickCount++
  cell = e.target

  if(clickCount == 1) {
    if(cell.value == 100) {
      clickCount = 0
      firstCellClicked = cell 
      showFinalImageInCell(cell)
    } else {
      showPersonForCell(cell)
      firstCellClicked = cell 
    }
  } else {
    if(cell.value != 100) {
      showPersonForCell(cell)
      setTimeout(function () {compareWithFirstClicked(cell)}, 1000)
    } else {
      removeImagesFromCells(cell, firstCellClicked)
      clickCount = 0
    }
  }
}

function compareWithFirstClicked(cell) {
  if(cell.value == firstCellClicked.value) {
    showFinalImageInCell(cell)
    showFinalImageInCell(firstCellClicked)
    clickCount = 0
  } else {
    removeImagesFromCells(cell, firstCellClicked)
    clickCount = 0
  }
}

function showFinalImageInCell(cell) {
  cell.innerHTML = "<img src=images/machine" + cell.id + ".jpg>"
}

function showPersonForCell(cell) {
  console.log("showing person" , images[slots[cell.id]])
  cell.innerHTML = "<img src=images/" + images[slots[cell.id]] +".jpg>"
}

function removeImagesFromCells(cell1, cell2) {
  cell1.innerHTML = ""
  cell2.innerHTML = ""


}
