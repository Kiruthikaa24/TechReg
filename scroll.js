let navLinksDiv = document.querySelector(".navigation")
let navLinksSpan = navLinksDiv.children

for (let i = 0; i < navLinksSpan.length; i++) {
	navLinksSpan[i].addEventListener("click", function () {
		let id = navLinksSpan[i].getAttribute("data-id")
		let element = document.getElementById(id)
		element.scrollIntoView({ behavior: "smooth" })
	})
}