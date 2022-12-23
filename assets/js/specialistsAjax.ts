export default function specialistsAjax(doctor_id) {
	console.log("-- Start Ajax --");
	document.getElementById("specialistsSpinner").classList.add("show");
	document.querySelector(".site-overlay").classList.add("show");

	setTimeout(() => {
		document.querySelector(".specialists__popup").classList.toggle("show");
	}, 200);

	let ajaxUrl = "/wp-admin/admin-ajax.php";
	const data = new FormData();
	data.append("action", "specialistsajax");
	data.append("doctor", doctor_id);
	fetch(ajaxUrl, {
		method: "POST",
		body: data,
		credentials: "same-origin",
	})
		.then((response) => response.json())
		.then((json) => {
			let title: string = json.title;
			let name: string = json.name;
			if (title) name = title + " " + name;
			let desc: string = json.desc;
			let img: string = json.img;

			document.getElementById("specialistName").innerHTML = name;
			document.getElementById("specialistDesc").innerHTML = desc;
			(document.getElementById("specialistImg") as HTMLImageElement).src = img;
			setTimeout(() => {
				document.getElementById("specialistsSpinner").classList.remove("show");
			}, 1000);
		});
}
