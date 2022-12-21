// DOM Elements
const mainPage = document.querySelector('.main-page');
const loginPage = document.querySelector('.login-page');
const middleContent = document.querySelector('.middle-content');
const signinPage =document.querySelector('.sign-up-page');
/**************************************/
/**************************************/

// Main page
const goToLoginPage = () => {
	mainPage.style.display = 'none';
	loginPage.style.display = 'grid';
};

const goToSigninPage = () => {
	mainPage.style.display = 'none';
	signinPage.style.display = 'grid';
};

middleContent.addEventListener('click', e => {
	if (e.target.classList[1] === 'main-btn') {
		goToSigninPage();
	}
	if (e.target.classList[1] === 'main-button') {
		goToLoginPage();
	}
});