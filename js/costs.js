const firestore = firebase.firestore();

window.onload = () => {
    const updateButton = document.getElementById('updateButton');

    updateButton.addEventListener('click', () => {updateData()})
    getData();
    let WithDraw = 0;
    let Theft = 0;
    let OperationalExpenses = 0;
    let AdministrativeExpenses = 0;
    let FinancialExpenses = 0;
    let DiverseExpenses = 0;
    let Comissions = 0;
    let Investments = 0;
    let Transportation = 0;
    let FixedCosts = 0;
    let ProfitMargin = 0;
    let Total = 0;
    let PaymentSheetBrute = 0;
    let ChargePercentage = 0;
    let Charge = 0;
    let LaborCostBrute = 0;

    function getData() {
        firestore.collection('Costs').onSnapshot(snapshot => {
            snapshot.forEach(doc => {
                const data = doc.data();
                WithDraw = data.WithDraw;
                Theft = data.Theft;
                OperationalExpenses = data.OperationalExpenses;
                AdministrativeExpenses = data.AdministrativeExpenses;
                FinancialExpenses = data.FinancialExpenses;
                DiverseExpenses = data.DiverseExpenses;
                Comissions = data.Comissions;
                Investments = data.Investments;
                Transportation = data.Transportation;
                FixedCosts = data.FixedCosts;
                ProfitMargin = data.ProfitMargin;
                Total = (
                    parseFloat(WithDraw) +
                    parseFloat(Theft) +
                    parseFloat(OperationalExpenses) + 
                    parseFloat(AdministrativeExpenses) + 
                    parseFloat(FinancialExpenses) +
                    parseFloat(DiverseExpenses) +
                    parseFloat(Comissions) +
                    parseFloat(Investments) +
                    parseFloat(Transportation) +
                    parseFloat(FixedCosts) +
                    parseFloat(ProfitMargin)
                );
                PaymentSheetBrute = data.PaymentSheetBrute;
                ChargePercentage = data.ChargePercentage;
                Charge = PaymentSheetBrute * ChargePercentage / 100;;
                LaborCostBrute = parseFloat(Charge) + parseFloat(PaymentSheetBrute);
                document.getElementById('WithDraw').value = WithDraw;
                document.getElementById('Theft').value = Theft;
                document.getElementById('OperationalExpenses').value = OperationalExpenses;
                document.getElementById('AdministrativeExpenses').value = AdministrativeExpenses;
                document.getElementById('FinancialExpenses').value = FinancialExpenses;
                document.getElementById('DiverseExpenses').value = DiverseExpenses;
                document.getElementById('Comissions').value = Comissions;
                document.getElementById('Investments').value = Investments;
                document.getElementById('Transportation').value = Transportation;
                document.getElementById('FixedCosts').value = FixedCosts;
                document.getElementById('ProfitMargin').value = ProfitMargin;
                document.getElementById('Total').value = Total;
                document.getElementById('PaymentSheetBrute').value = PaymentSheetBrute;
                document.getElementById('ChargePercentage').value = ChargePercentage;
                document.getElementById('Charge').value = Charge;
                document.getElementById('LaborCostBrute').value = LaborCostBrute;
            })
        })
    }

    function updateData() {
        WithDraw = document.getElementById('WithDraw').value  
        Theft = document.getElementById('Theft').value;
        OperationalExpenses = document.getElementById('OperationalExpenses').value;
        AdministrativeExpenses = document.getElementById('AdministrativeExpenses').value;
        FinancialExpenses = document.getElementById('FinancialExpenses').value;
        DiverseExpenses = document.getElementById('DiverseExpenses').value;
        Comissions = document.getElementById('Comissions').value;
        Investments = document.getElementById('Investments').value;
        Transportation = document.getElementById('Transportation').value;
        FixedCosts = document.getElementById('FixedCosts').value;
        ProfitMargin = document.getElementById('ProfitMargin').value;
        Total = Total = (
            parseFloat(WithDraw) +
            parseFloat(Theft) +
            parseFloat(OperationalExpenses) + 
            parseFloat(AdministrativeExpenses) + 
            parseFloat(FinancialExpenses) +
            parseFloat(DiverseExpenses) +
            parseFloat(Comissions) +
            parseFloat(Investments) +
            parseFloat(Transportation) +
            parseFloat(FixedCosts) +
            parseFloat(ProfitMargin)
        );
        PaymentSheetBrute = document.getElementById('PaymentSheetBrute').value;
        ChargePercentage = document.getElementById('ChargePercentage').value;
        Charge = PaymentSheetBrute * ChargePercentage / 100;
        LaborCostBrute = parseFloat(Charge) + parseFloat(PaymentSheetBrute);
        firestore.collection('Costs').doc('kJEJcageHISuAcRqBVnB').update({
            Withdraw: WithDraw,
            Theft,
            OperationalExpenses,
            AdministrativeExpenses,
            FinancialExpenses,
            DiverseExpenses,
            Comissions,
            Investments,
            Transportation,
            FixedCosts,
            ProfitMargin,
            Total,
            PaymentSheetBrute,
            ChargePercentage,
            Charge,
            LaborCostBrute,
        }).then((resp) => {
            getData();
        }).catch((err) => {

        })
    }
}