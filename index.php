<?php

/* 
 * Author         : Saqib Omer
 * Author Contact : saqibomer.cs@gmail.com
 * Description    : 
 * Date Created   :
 * Version        :
 */

?>

<html>
    <head>
        <title>Tis Currency Converter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="js/tis.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">
                
                <div class="panel panel-default">
                    
                        <div class="panel-body">
                            <h1>Currency Converter Demo</h1>
                            
                            <form class="" id="currencyForm" name="currencyForm" action="#" method="POST">
                                <div class="form-group">
                                    <label for="baseCurrency">Base Currency Amount</label>
                                    <input type="number" class="form-control" id="baseCurrency" required="">
                                </div><!-- end of form-group -->
                                
                                <div class="form-group">
                                    <label for="baseCurrencyCode">Base Currency Code</label>
                                    <select name="baseCurrencyCode" id="baseCurrencyCode" class="form-control">
                                        <option value="USD" selected="">US Dollar</option>
                                        <option value="GBP">Pound Sterling</option>
                                        <option value="EUR">Euro</option>
                                        <option value="AUD">Australian Dollar</option>
                                        <option value="AED">United Arab Emirates Dirham</option>
                                        <option value="CNY">Chinese Yuan</option>
                                        <option value="PKR">Pakistani Rupee</option>
                                        <option value="INR">Indian Rupee</option>
                                    </select>
                                </div><!-- end of form-group -->
                                <hr />
                                <div class="form-group">
                                    <label for="convertedCurrencyCode">Converted Currency Code</label>
                                    <select name="convertedCurrencyCode" id="convertedCurrencyCode" class="form-control">
                                        <option value="USD" selected="">US Dollar</option>
                                        <option value="GBP">Pound Sterling</option>
                                        <option value="EUR">Euro</option>
                                        <option value="AUD">Australian Dollar</option>
                                        <option value="AED">United Arab Emirates Dirham</option>
                                        <option value="CNY">Chinese Yuan</option>
                                        <option value="PKR">Pakistani Rupee</option>
                                        <option value="INR">Indian Rupee</option>
                                    </select>
                                </div><!-- end of form-group -->
                                <div class="form-group">
                                    <label for="convertedCurrency">Converted Currency Amount</label>
                                    <input type="number" class="form-control" id="convertedCurrency" readonly="">
                                </div><!-- end of form-group -->
                                
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" id="convertButton" value="Convert" /> &nbsp; &nbsp; <input type="button" class="btn btn-primary" id="resetButton" value="Reset" />
                                </div><!-- end of form-group -->
                                      
                            </form>
                            
                        </div><!-- end of panel-body -->
                        
                </div><!-- end of panel -->
                
            </div><!-- col-lg-12 -->
        </div><!-- row -->
    </body>
</html>