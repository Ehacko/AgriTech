window.onsubmit = e => {
  const data = {};
  e.preventDefault()
  for(const field of [...e.target].filter(field => field.name)) {data[field.name] = field.value === 'on' ? field.checked : field.value; }
  // return console.log(data);
  $.ajax({
    method: "POST",
    url: '/contact.php',
    data
  })
  .done( res => alert(res) )
  .fail(function (jqXHR, textStatus, errorThrown) {
    console.log(jqXHR, textStatus, errorThrown)
    // data.collbackErreur()
  })
}