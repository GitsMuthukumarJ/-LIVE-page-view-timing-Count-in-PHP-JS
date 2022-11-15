<style>
.view_count {
    /* background-color: #04607e; */
    background: linear-gradient(178deg, rgb(4 96 126) 0%, rgb(48 201 191) 100%) !important;
    color: #fff;
    flex-direction: column;
    display: flex;
    align-items: center;
    width: 10vh;
    float: right;
    border-radius: 50%;
    line-height: 0.5rem;
}

h1 {
    font-size: 20px;
    margin: 0;
}
</style>

<div class="view_count">
    <p>Views</p>
    <h1 id="count">0</h1>
    <p>Times</p>
</div>

<!-- 
<script>
const countElement = document.getElementById('count');

update();

function update() {
    fetch('https://api.countapi.xyz/hit/anyname/visit/?count=1').then(res => res.json()).then(res => {
        countElement.innerHTML = res.value;
    })
}
</script> -->

<script>
const count = document.getElementById("count");

incrementVisitsCount();

function incrementVisitsCount() {
    let visits;

    if (!localStorage.getItem("visits")) localStorage.setItem("visits", 1);
    else {
        visits = +localStorage.getItem("visits");
        const incrementedCount = visits + 1;

        localStorage.setItem("visits", incrementedCount);
    }

    count.innerText = localStorage.getItem("visits");
}
</script>
