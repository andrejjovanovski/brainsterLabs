// FILTER INPUTS
let checkBoxMarketing = document.querySelector("#marketing");
let checkBoxPrograming = document.querySelector("#programing");
let checkBoxDesign = document.querySelector("#design");

//LISTENS FOR CHANGE ON CHECKBOX INPUT
document.querySelector("#marketing").addEventListener("change", isCheckedMarketing);
document.querySelector("#programing").addEventListener("change", isCheckedPrograming);
document.querySelector("#design").addEventListener("change", isCheckedDesign);

// MARKETING FILTER STYLES SELECTION
let filterMarketing = document.querySelector(".active-marketing");
let iconMarketing = document.querySelector(".icon-marketing");

// PROGRAMING FILTER STYLES SELECTION
let filterPrograming = document.querySelector(".active-programing");
let iconPrograming = document.querySelector(".icon-programing");

// DESIGN FILTER STYLES SELECTION
let filterDesign = document.querySelector(".active-design");
let iconDesign = document.querySelector(".icon-design")

// RESET STYLES FOR MARKETING
function resetMarketingStyles() {
    filterMarketing.style.backgroundColor = "#302F38FF";
    filterMarketing.style.color = "#ffffff";
    iconMarketing.style.display = "none"
}

// RESET STYLES FOR PROGRAMING
function resetProgramingStyles() {
    filterPrograming.style.backgroundColor = "#302F38FF";
    filterPrograming.style.color = "#ffffff";
    iconPrograming.style.display = "none"
}

// RESET STYLES FOR DESIGN
function resetDesignStyles() {
    filterDesign.style.backgroundColor = "#302F38FF";
    filterDesign.style.color = "#ffffff";
    iconDesign.style.display = "none"
}


// CHECKS IF MARKETING FILTER IS SELECTED
function isCheckedMarketing() {


    if (checkBoxMarketing.checked) {
        filterMarketing.style.backgroundColor = "#FF1300FF";
        filterMarketing.style.color = "#302F38FF";
        iconMarketing.style.display = "block"
        checkBoxDesign.checked = 0;
        resetDesignStyles();
        checkBoxPrograming.checked = 0;
        resetProgramingStyles();
        filterMarketingCards();
    } else {
        resetMarketingStyles();
        showAllCards()
    }
}

// CHECKS IF PROGRAMING FILTER IS SELECTED
function isCheckedPrograming() {

    if (checkBoxPrograming.checked) {
        filterPrograming.style.backgroundColor = "#FF1300FF";
        filterPrograming.style.color = "#302F38FF";
        iconPrograming.style.display = "block"
        checkBoxDesign.checked = 0;
        resetDesignStyles();
        checkBoxMarketing.checked = 0;
        resetMarketingStyles();
        filterProgramingCards();

    } else {
        resetProgramingStyles();
        showAllCards();
    }
}

// CHECKS IF DESIGN FILTER IS SELECTED
function isCheckedDesign() {

    if (checkBoxDesign.checked) {
        filterDesign.style.backgroundColor = "#FF1300FF";
        filterDesign.style.color = "#302F38FF";
        iconDesign.style.display = "block"
        checkBoxMarketing.checked = 0;
        resetMarketingStyles();
        checkBoxPrograming.checked = 0;
        resetProgramingStyles();
        filterDesignCards();
    } else {
        resetDesignStyles();
        showAllCards();
    }
}

// HIDE ALL CARDS
function hideAllCards() {
    let allCards = document.querySelectorAll(".filter-card");

    allCards.forEach(card => {
        card.style.display = "none";
    });
}

// SHOW ALL CARDS
function showAllCards() {
    let allCards = document.querySelectorAll(".filter-card");

    allCards.forEach(card => {
        card.style.display = "block";
    });
}

// FILTER MARKETING CARDS
function filterMarketingCards() {
    hideAllCards();

    let marketingCards = document.querySelectorAll(".card-marketing");

    marketingCards.forEach(marketingCard =>{
        marketingCard.style.display = "block";
    });
}

// FILTER PROGRAMING CARDS
function filterProgramingCards() {
    hideAllCards();

    let programingCards = document.querySelectorAll(".card-programing");

    programingCards.forEach(marketingCard =>{
        marketingCard.style.display="block";
    });
}

// FILTER DESIGN CARDS
function filterDesignCards() {
    hideAllCards();

    let designCards = document.querySelectorAll(".card-design");

    designCards.forEach(designCard => {
        designCard.style.display="block";
    });
}