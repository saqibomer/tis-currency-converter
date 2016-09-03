/* 
 * Author         : Saqib Omer
 * Author Contact : saqibomer.cs@gmail.com
 * Description    : 
 * Date Created   :
 * Version        :
 */

$(document).ready(function() {
   
   // Focus on currency input
   $("#baseCurrency").focus();
   
   // Convert Currency
   $("#convertButton").click(function(){
       
      $("#convertButton").val("Converting");
      $("#convertButton").prop("disabled", true);
      
      var baseCurrency = $("#baseCurrency").val();
      
      if (baseCurrency === "") { // if input currency is empty
          alert("Enter Currency");
          $("#baseCurrency").focus();
      }
      else {
            var currency_input = baseCurrency;
            var currency_from  = $("#baseCurrencyCode").val();
            var currency_to    = $("#convertedCurrencyCode").val();
            
            
            var yql_base_url = "https://query.yahooapis.com/v1/public/yql";
            var yql_query = 'select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20("'+currency_from+currency_to+'")';
            var yql_query_url = yql_base_url + "?q=" + yql_query + "&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";

            var op_data =0;

            $.get( yql_query_url, function( data ) {
            
                $("#convertButton").prop("disabled", false);
                $("#convertButton").val("Convert");
                
                op_data = data.query.results.rate.Rate;
            
                var convertedCurrency = currency_input * op_data;
                
                $("#convertedCurrency").val(convertedCurrency).toFixed(2);
                
                
            
            });
      
          
      }
      
      
      
      
   });
   
   // Reset Currency
   $("#resetButton").click(function(){
       $("#baseCurrency").val("");
       $("#convertedCurrency").val("");
       
       $("#convertButton").val("Convert");
       $("#convertButton").prop("disabled", false);
   });
   
});
