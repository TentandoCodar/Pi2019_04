<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Custos | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; color: #000; background-image: linear-gradient(60deg, #f2f2f2, #f2f2f2);">
    <?php include 'partes/cabecalho.php' ?>

    <div class="pt-5 text-center w-100">
      <div class="pt-5 mr-5 ml-5">
        <br>
        <h2 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">CUSTOS</i></h2>
      </div>
      <div class="row pt-5 ml-5 mr-5 mt-5 mb-5 form_style">
        <div class="col">
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Retirada (%)</span><br>
              <input id="WithDraw" type="text" name="" value="" class="inputadmin2" placeholder="Retirada (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Impostos (%)</span><br>
              <input id="Theft" type="text" name="" value="" class="inputadmin2" placeholder="Impostos (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Despesas Operacionais (%)</span><br>
              <input id="OperationalExpenses" type="text" name="" value="" class="inputadmin2" placeholder="Despesas Operacionais (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Despesas Administrativas (%)</span><br>
              <input id="AdministrativeExpenses" type="text" name="" value="" class="inputadmin2" placeholder="Despesas Administrativas (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Despesas Financeiras (%)</span><br>
              <input id="FinancialExpenses" type="text" name="" value="" class="inputadmin2" placeholder="Despesas Financeiras (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Despesas Diversas (%)</span><br>
              <input id="DiverseExpenses" type="text" name="" value="" class="inputadmin2" placeholder="Despesas Diversas (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Comissões (%)</span><br>
              <input id="Comissions" type="text" name="" value="" class="inputadmin2" placeholder="Comissões (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Investimentos (%)</span><br>
              <input id="Investments" type="text" name="" value="" class="inputadmin2" placeholder="Investimentos (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Transportes/Fretes (%)</span><br>
              <input id="Transportation" type="text" name="" value="" class="inputadmin2" placeholder="Transportes/Fretes (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Custos Fixos (%)</span><br>
              <input id="FixedCosts" type="text" name="" value="" class="inputadmin2" placeholder="Custos Fixos (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Margem de Lucro (%)</span><br>
              <input id="ProfitMargin" type="text" name="" value="" class="inputadmin2" placeholder="Margem de Lucro (%)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Total</span><br>
              <input id="Total" type="text" name="" value="" class="inputadmin2" placeholder="Total">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <h3 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">CÁLCULO DO CUSTO DE MÃO-DE-OBRA</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Valor Bruto da Folha de Pagamento</span><br>
              <input id="PaymentSheetBrute" type="text" name="" value="" class="inputadmin2" placeholder="Valor Bruto da Folha de Pagamento">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Porcentagem dos Encargos (%)</span><br>
              <input id="ChargePercentage" type="text" name="" value="" class="inputadmin2" placeholder="Porcentagem dos Encargos (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Encargos (R$)</span><br>
              <input disabled id="Charge" type="text" name="" value="" class="inputadmin2" placeholder="Encargos (R$)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Custo Bruto da Mão-De-Obra (%)</span><br>
              <input disabled id="LaborCostBrute" type="text" name="" value="" class="inputadmin2" placeholder="Custo Bruto da Mão-De-Obra (%)">
            </div>
          </div>
          <div class="row">
            <div class="col-12 pt-5 pb-5 text-center">
              <button id="updateButton" type="button" name="button" class="botao_menu2">ATUALIZAR</button>
              <button id="signUpClientButton" type="button" name="button" class="botao_menu2 mt-4" onclick="entrarAdmin()">CANCELAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
      require 'partes/provider.php';
      require 'partes/adminProvider.php';

    ?>
    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/costs.js"></script>
  </body>
</html>
