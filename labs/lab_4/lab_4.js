function verifyForm() {
  minWeight = document.getElementById("minWeight").val
  maxWeight = document.getElementById("maxWeight").val
  male = document.getElementById("male").val
  female = document.getElementById("female").val

  if(maxWeight <= minWeight) {
    alert("Maximum weight must be greater than minimum weight")  
    return false
  }
  return true
}
