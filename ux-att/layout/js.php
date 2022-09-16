<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/feather-icons/feather.min.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/perfect-scrollbar.min.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/pages/dashboard.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/main.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/index.js"></script>

<script src="http://cursos.egp.ce.gov.br/AulaOnline/cdn-2022/assets/js/jquery.magnific-popup.min.js"></script>


<script>
    const html = document.querySelector("html")
const checkbox = document.querySelector("input[name=theme]")

const getStyle = (element, style) => 
    window
        .getComputedStyle(element)
        .getPropertyValue(style)


const initialColors = {
    bg: getStyle(html, "--bg"),
    bgPanel: getStyle(html, "--bg-panel"),
    colorHeadings: getStyle(html, "--color-headings"),
    colorText: getStyle(html, "--color-text"),
}

const darkMode = {
    bg: "#333333",
    bgPanel: "#434343",
    colorHeadings: "#3664FF",
    colorText: "#B5B5B5"
}

const transformKey = key => 
    "--" + key.replace(/([A-Z])/, "-$1").toLowerCase()


const changeColors = (colors) => {
    Object.keys(colors).map(key => 
        html.style.setProperty(transformKey(key), colors[key]) 
    )
}


checkbox.addEventListener("change", ({target}) => {
    target.checked ? changeColors(darkMode) : changeColors(initialColors)
})
</script>
<!-- <script src="../cdn/assets/js/main.js"></script> -->