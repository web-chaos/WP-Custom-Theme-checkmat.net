// Проверка поддержки webp, добавление класса webp или no-webp для HTML
export function isWebp() {
    // Проверка поддержки webp
    function testWebP( callback ) {
        let webP = new Image();
        webP.onload = webP.onerror = function () {
            callback( webP.height == 2 );
        }
        webP.src = "data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7";
    }
    // Добавление класса _webp или _no-webp для HTML
    testWebP(function (support) {
        let className = support === true ? 'webp' : 'no-webp';
        document.documentElement.classList.add( className );
    });
}

export function imageSize() {
	const images = document.getElementsByTagName('img')
	for (let i = 0; i < images.length; i++) {
		const img = images[i]

		if (!img.hasAttribute('width') || !img.hasAttribute('height')) {
			const tempImg = new Image()
			tempImg.src = img.src

			tempImg.onload = function () {
				if (!img.hasAttribute('width')) {
					img.setAttribute('width', tempImg.width)
				}
				if (!img.hasAttribute('height')) {
					img.setAttribute('height', tempImg.height)
				}
			}
		}
	}
}