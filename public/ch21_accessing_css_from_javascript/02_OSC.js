// # The O Function
/*
      function O(i) {
        return document.getElementById(i);
      }
      */
// Object
function O(i) {
  return typeof i == "object" ? i : document.getElementById(i);
}

// Style
function S(i) {
  return O(i).style;
}

// Class
function C(i) {
  return document.getElementsByClassName(i);
}

// O('myobj').style.color='green'
// S("myobj").color = "green";

// fred=O('myobj')
// S(fred).color='red'

// myarray = C("myclass");
// for (i = 0; i < myarray.length; ++i) S(myarray[i]).textDecoration = "underline";
