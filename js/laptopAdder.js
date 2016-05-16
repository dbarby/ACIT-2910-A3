
        /*<![CDATA[*/
        $(document).ready(function() {
            var clicks = 0;
            document.getElementById("finished").disabled = true;
            
            // FOR PUTTING OBJECTS INTO HTML5 WEB STORAGE - ADD METHODS TO THE STORAGE OBJECT
            // http://stackoverflow.com/questions/2010892/storing-objects-in-html5-localstorage
            Storage.prototype.setObject = function(key, value) {
                this.setItem(key, JSON.stringify(value));
            }

            Storage.prototype.getObject = function(key) {
                var value = this.getItem(key);
                return value && JSON.parse(value);
            }

            // LOAD ALL PRODUCTS

            $("#finished").click(function() {

                
                //retrieve laptop info
                var laptopInfo = $("#laptopAdderList input");
                
                var laptopInfoArray = [];
                $.each(laptopInfo, function(key, value) {

                    var laptop = {info: $(value).attr("data-laptop-info"), value: $(value).val()};
                    laptopInfoArray.push(laptop);
                });
                

                var laptopInfoAsJSON = JSON.stringify(laptopInfoArray);
                console.log("laptopInfoAsJSON", laptopInfoAsJSON);
                                 
          
                console.log("laptop add with following attributes", laptopInfoArray);

                $.ajax({
                    url: "./laptopAdder.php",
                    type: "POST",
                    dataType: 'json',
                    data: {action: "addLaptop", laptopInfo: laptopInfoAsJSON},
                    success: function(returnedData) {
                        console.log("laptop adder response: ", returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
                var shoppingCartList = $("#shoppingCart").html("");
            });
            
            
            $("#addALaptopBtn").click(function() {
                if(clicks == 0){
                $.ajax({
                    url: "./laptopInfo.php",
                    type: "GET",
                    dataType: 'html',
                    success: function(returnedData) {
                        //console.log("cart checkout response: ", returnedData);
                        $("#laptopAdderList").html(returnedData);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });
                    document.getElementById("finished").disabled = false;
                    clicks++; 
                }
       
            });

        });
        /*]]>*/
