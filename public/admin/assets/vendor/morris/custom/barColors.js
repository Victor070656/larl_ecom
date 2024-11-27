// Morris Bar Colors
Morris.Bar({
	element: "barColors",
	data: [
		{ x: "January", Sales: 6 },
		{ x: "February", Sales: 1 },
		{ x: "March", Sales: 2 },
		{ x: "April", Sales: 3 },
		{ x: "May", Sales: 2 },
		{ x: "June", Sales: 4 },
		{ x: "July", Sales: 7 },
		{ x: "August", Sales: 2 },
		{ x: "September", Sales: 5 },
		{ x: "October", Sales: 9 },
		{ x: "November", Sales: 3 },
		{ x: "December", Sales: 5 },
	],
	xkey: "x",
	ykeys: ["Sales"],
	labels: ["Sales"],
	resize: true,
	gridLineColor: "#cccccc",
	hideHover: "auto",
	barColors: [
		"#493f94",
		"#5247a7",
		"#5b4fb9",
		"#6b61c0",
		"#7c72c7",
		"#8c84ce",
		"#9d95d5",
		"#ada7dc",
		"#bdb9e3",
		"#cecaea",
	],
});