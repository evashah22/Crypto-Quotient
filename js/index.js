
var aptos = document.getElementById("aptos");
var arbitrum = document.getElementById("arbitrum");
var beam = document.getElementById("beam");
var binancecoin = document.getElementById("binancecoin");
var btc = document.getElementById("bitcoin");
var cardano = document.getElementById("cardano");
var chainlink = document.getElementById("chainlink");
var cosmos = document.getElementById("cosmos");
var cronos = document.getElementById("cronos");
var doge = document.getElementById("dogecoin");
var eth = document.getElementById("ethereum");
var filecoin = document.getElementById("filecoin");
var litecoin = document.getElementById("litecoin");
var optimism = document.getElementById("optimism");
var solana = document.getElementById("solana");
var stack = document.getElementById("stack");
var stellar = document.getElementById("stellar");
var tron = document.getElementById("tron");
var uniswap = document.getElementById("uniswap");


var liveprice = {
    "async": true,
    "crossDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Clitecoin%2Cethereum%2Ccosmos%2Ccronos%2Cdogecoin%2Cbeam%2Coptimism%2Carbitrum%2Cstellar%2Cfilecoin%2Cbinancecoin%2Cstack%2Csolana%2Ccardano%2Cchainlink%2Ctron%2Cuniswap%2Captos&vs_currencies=inr",
    "method": "GET",
    "headers": {}
};

$.ajax(liveprice)
.done(function(response) {
    aptos.innerHTML = response.aptos.inr;
    arbitrum.innerHTML = response.arbitrum.inr;
    beam.innerHTML = response.beam.inr;
    binancecoin.innerHTML = response.binancecoin.inr;
    bitcoin.innerHTML = response.bitcoin.inr;
    cardano.innerHTML = response.cardano.inr;
    chainlink.innerHTML = response.chainlink.inr;
    cosmos.innerHTML = response.cosmos.inr;
    cronos.innerHTML = response.cronos.inr;
    dogecoin.innerHTML = response.dogecoin.inr;
    ethereum.innerHTML = response.ethereum.inr;
    filecoin.innerHTML = response.filecoin.inr;
    litecoin.innerHTML = response.litecoin.inr;
    optimism.innerHTML = response.optimism.inr;
    solana.innerHTML = response.solana.inr;
    stack.innerHTML = response.stack.inr;
    stellar.innerHTML = response.stellar.inr;
    tron.innerHTML = response.tron.inr;
    uniswap.innerHTML = response.uniswap.inr;
})

