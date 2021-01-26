
<?php    
  $mustBeLogin = true;
  $access= array(0,2);
  include_once("protect.php");
  if(!isset($_GET["id"])){
        redirect("/index.php");
    }else{
        $x=$_GET["id"];
    }
    $exist =sqlSelect("product",[],[],[],[],[
                         [
                            "key" => "id" ,
                            "operation" => "=" ,
                            "value" => $x ,
                            "condition" => "AND" ,
                        ],
                        [
                            "key" => "status" ,
                            "operation" => "=" ,
                            "value" =>1,
                        ]]);
    $exist = $exist['result'];
    if (empty($exist)) {
         redirect("/index.php");
    }
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PayPort</title>
    <link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
    <link
      rel="stylesheet"
      href="css2/creditly.css"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="main" style="height: auto;">
      <br /><br />
      <div id="myAccordion" class="nl-accordion">
        <ul>
          <li>
            <input
              type="radio"
              id="nl-radio-1"
              name="nl-radio"
              class="nl-radio"
              checked="checked"
            />
            <label class="nl-label" for="nl-radio-1"
              >مبلغ قابل پرداخت :<?=$exist[0]->price?></label
            >
            <div class="nl-content">
              <div class="agileits_w3layouts_tab1 agileits_w3layouts_tab">
                <form
                  action="/ex/payex.php?id=<?=$x?>"
                  method="post"
                  class="creditly-card-form agileinfo_form"
                >
                  <section class="creditly-wrapper wthree w3_agileits_wrapper">
                    <div class="first-row form-group">
                      <div class="controls">
                        <label class="control-label" style="float: right"
                          >نام دارنده کارت
                        </label>
                        <input
                          class="billing-address-name form-control"
                          type="text"
                          name="name"
                          placeholder="لطفا نام خود را وارد کنید"
                          required=""
                        />
                      </div>
                      <div class="controls">
                        <label class="control-label" style="float: right"
                          >شماره کارت:</label
                        >
                        <input
                          class="number credit-card-number form-control"
                          name="number"
                          type="number"
                          required=""
                        />
                      </div>
                      <div class="w3_agileits_card_number_grids">
                        <div class="w3_agileits_card_number_grid_left">
                          <div class="controls">
                            <label class="control-label" style="float: right">
                              تاریخ انقضا
                            </label>
                            <input
                              class="expiration-month-and-year form-control date"
                              name="expiration-month-and-year"
                              type="date"
                              required=""
                            />
                          </div>
                        </div>
                        <div class="w3_agileits_card_number_grid_right">
                          <div class="controls">
                            <label class="control-label" style="float: right"
                              >CVV</label
                            >
                            <input
                              class="security-code form-control"
                              type="number"
                              name="cvv"
                              required=""
                            />
                          </div>
                        </div>
                        <div class="w3_agileits_card_number_grid_right">
                          <div class="controls">
                            <label class="control-label" style="float: right"
                              >رمز دوم
                            </label>
                            <input
                              class="security-code form-control"
                              type="number"
                              name="security-code"
                              required=""
                            />
                          </div>
                        </div>
                        <button class="pass2">دریافت رمز دوم</button>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <button class="submit">
                      <span
                        >پرداخت
                        <i
                          class="fas fa-long-arrow-alt-right"
                          aria-hidden="true"
                        ></i
                      ></span>
                    </button>
                  </section>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
