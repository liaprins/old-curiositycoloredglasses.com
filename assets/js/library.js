var iconField = document.getElementById('librarysection');
var iconArticle = document.querySelectorAll('.libraryentry');
var fieldLength = iconArticle.length;


function libraryIconClick(e) {

	var selectedIcon = e.target;

    if (selectedIcon.nextElementSibling.style.display === 'none') {

		for (var i = 0; i < fieldLength; i++) {
			iconArticle[i].style.display = 'none';
		}

        selectedIcon.nextElementSibling.style.display = 'block';
    } else {
        selectedIcon.nextElementSibling.style.display = 'none';
    }
}

iconField.addEventListener('click', libraryIconClick, false);