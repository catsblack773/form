(function () {
	const form = document.forms.myForm
	form.onsubmit = async e => {
		e.preventDefault()
		const resultMessage = document.querySelector('.alert')
		const data = new FormData(form)

		const response = await fetch('/send.php', {
			method: 'POST',
			body: data
		})

		const result = await response.json()

		resultMessage.innerText = result.message
		resultMessage.style.display = 'block'

		if (result.res === true) {
			resultMessage.classList.add('ok')
			setTimeout(() => {
				resultMessage.classList.remove('ok')
				resultMessage.innerText = ''
				resultMessage.style.display = 'none'
			}, 2000)
		} else {
			resultMessage.classList.add('error')
			setTimeout(() => {
				resultMessage.classList.remove('error')
				resultMessage.innerText = ''
				resultMessage.style.display = 'none'
			}, 2000)
		}

		console.log(result)
	}
	
}())