function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  var ap =setampm(h);
  h = settwel(h)
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById('clock').innerHTML =
  h + " : " + m + " : " + s +" " + ap;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
function setampm(k) {
  if (k <= 12) {k = "AM"}
  else {k = "PM"};  
  return k;
}
function settwel(j) {
  if (j == 0) {j = 12}
  else if (j > 12) {j = j - 12};  
  return j;
}