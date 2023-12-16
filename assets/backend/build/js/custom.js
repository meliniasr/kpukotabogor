function setYearRangePicker(input1, input2) {
  $(input1).datetimepicker({
    format: "YYYY",
    useCurrent: false,
    viewMode: "years"
  })
  $(input1).on("change.datetimepicker", function (e) {
    $(input2).val("")
    $(input2).datetimepicker('minDate', e.date);
  })
  $(input2).datetimepicker({
    format: "YYYY",
    useCurrent: false,
    viewMode: "years"
  })
}
