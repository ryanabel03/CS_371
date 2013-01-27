totalCost = 0
function calculateCost() {
  item = document.getElementById("item").value
  quantity = document.getElementById("qty").value
  itemCost = parseFloat(document.getElementById(item).innerHTML.substring(1))
  totalItemCost = itemCost * quantity
  totalCost += totalItemCost
  insertRowWithItem(item, quantity, totalItemCost)
  return false
}

function insertRowWithItem(item, quantity, cost) {
  table = document.getElementById("order")
  row = table.insertRow(1)
  cell1 = row.insertCell(0)
  cell2 = row.insertCell(1)
  cell3 = row.insertCell(2)

  cell1.innerHTML = item
  cell2.innerHTML = quantity 
  cell3.innerHTML = "$" + cost 

  updateTotalCost(table)
}

function updateTotalCost(table) {
  if(table.rows.length < 4) {
    row = table.insertRow(-1)
    cell1 = row.insertCell(0)
    cell2 = row.insertCell(1)
    cell3 = row.insertCell(2)

    cell3.innerHTML = "Total: $" + totalCost
  } else {
    row = table.rows.item(table.rows.length - 1)
    cell = row.cells.item(row.cells.length - 1)
    cell.innerHTML = "Total: $" + totalCost
  } 
}
