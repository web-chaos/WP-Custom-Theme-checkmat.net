document.addEventListener('DOMContentLoaded', function () {
    $ = jQuery;

	function initMenuToggle() {
		document.addEventListener('click', function (e) {
			console.log(e.target)
			if (e.target.matches('.hamburger')) {
				e.preventDefault()
				document.querySelector('.mob-nav').classList.add('open')
				document.body.classList.add('hidden')
			} else if (e.target.matches('.overlay') || e.target.matches('.mob-nav__close')) {
				document.querySelector('.mob-nav').classList.remove('open')
				document.body.classList.remove('hidden')
			}
		})
	}

	initMenuToggle()

	function initStickyHeader() {
		const header = document.querySelector('.header')
		const headerHeight = header.offsetHeight

		window.addEventListener('scroll', () => {
			header.classList.toggle('sticky', window.scrollY > headerHeight)
		})
	}

	initStickyHeader()
    
	function handleCF7Submit() {
		document.addEventListener('wpcf7submit', function (event) {
			const form = event.target
			setTimeout(() => {
                if (typeof $.fancybox !== 'undefined') {
                    $.fancybox.close()
                }

				const responseOutput = form.querySelector('.wpcf7-response-output')
				if (responseOutput) {
					responseOutput.style.display = 'none'
				}
				form.reset()
			}, 1500)
		})
	}
	handleCF7Submit()

	function initializeFAQAccordion() {
		const accordionContainer = document.querySelector('.accordion')
		if (!accordionContainer) return

		const items = accordionContainer.querySelectorAll('.accordion-item')
		if (items.length === 0) return

		items.forEach(item => {
			const title = item.querySelector('.accordion-button')
			const content = item.querySelector('.accordion-content')

			if (!title || !content) return

			content.style.transition = 'max-height 0.3s ease'
			content.style.overflow = 'hidden'
			content.style.maxHeight = '0'

			title.addEventListener('click', () => {
				const isActive = item.classList.contains('active')

				items.forEach(otherItem => {
					const otherContent = otherItem.querySelector('.accordion-content')
					if (otherContent) {
						otherContent.style.maxHeight = '0'
						otherItem.classList.remove('active')
					}
				})

				if (!isActive) {
					content.style.maxHeight = content.scrollHeight + 'px'
					item.classList.add('active')
				}
			})
		})

		const resizeObserver = new ResizeObserver(() => {
			items.forEach(item => {
				const content = item.querySelector('.accordion-content')
				if (content && content.style.maxHeight !== '0px') {
					content.style.maxHeight = content.scrollHeight + 'px'
				}
			})
		})

		items.forEach(item => {
			const content = item.querySelector('.accordion-content')
			if (content) resizeObserver.observe(content)
		})
	}
	initializeFAQAccordion()

	function initStepSwiper() {
		new Swiper('.steps__slider', {
			slidesPerView: 3,
			spaceBetween: 32,
			loop: false,
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.steps__slider--wrapper .swiper-next',
				prevEl: '.steps__slider--wrapper .swiper-prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				960: {
					slidesPerView: 3,
				},
			},
		})
	}
	initStepSwiper()

	function initPassSwiper() {
		new Swiper('.subscriptions__pass', {
			slidesPerView: 3,
			spaceBetween: 32,
			loop: false,
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			// navigation: {
			// 	nextEl: '.swiper-next',
			// 	prevEl: '.swiper-prev',
			// },
			breakpoints: {
				300: {
					slidesPerView: 1.2,
				},
				460: {
					slidesPerView: 1.8,
				},
				768: {
					slidesPerView: 2.8,
				},
				1200: {
					slidesPerView: 3,
				},
			},
		})
	}
	initPassSwiper()

	function initHomeBlogSwiper() {
		new Swiper('.blog-home__posts', {
			slidesPerView: 3,
			spaceBetween: 32,
			loop: true,
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			navigation: {
				nextEl: '.blog-home__swiper-next',
				prevEl: '.blog-home__swiper-prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
				},
				360: {
					slidesPerView: 1.2,
				},
				768: {
					slidesPerView: 2.5,
				},
				1200: {
					slidesPerView: 3,
				},
			},
		})
	}
	initHomeBlogSwiper()

	function initReviewsSwiper() {
		new Swiper('.reviews__slider', {
			slidesPerView: 3.2,
			spaceBetween: 32,
			loop: true,
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			breakpoints: {
				300: {
					slidesPerView: 1.5,
				},
				768: {
					slidesPerView: 2.5,
				},
				1200: {
					slidesPerView: 3.2,
				},
			},
		})
	}
	initReviewsSwiper()

	function enableSmoothScrollWithOffset() {
		document.querySelectorAll('.scroll-to').forEach(link => {
			link.addEventListener('click', function (e) {
				e.preventDefault()
				const targetId = this.getAttribute('href')
				const targetElement = document.querySelector(targetId)

				if (targetElement) {
					const offset = 50
					const targetPosition = targetElement.offsetTop - offset

					window.scrollTo({
						top: targetPosition,
						behavior: 'smooth',
					})
				}
			})
		})
	}
	enableSmoothScrollWithOffset()

	function initSingleBlogSwiper() {
		new Swiper('.recent-posts', {
			slidesPerView: 1,
			grid: {
				rows: 4,
			},
			spaceBetween: 32,
			breakpoints: {
				300: {
					slidesPerView: 1.2,
					grid: { rows: 1 },
					spaceBetween: 24,
				},
				768: {
					slidesPerView: 2.2,
					grid: { rows: 1 },
					spaceBetween: 24,
				},
				960: {
					slidesPerView: 1,
					grid: {
						rows: 4,
					},
				},
			},
		})
	}
	initSingleBlogSwiper()

	
})
