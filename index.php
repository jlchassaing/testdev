<!Doctype html>
<html lang="fr">
    <head>
        <title>Test dev web</title>
        <meta charset="UTF-8" />
        <style type="text/css">
            html,body {
                font-size: 14px;
                font-family:Verdana,arial,sans-serif;
                background-color: #E6E6E6;
                color: #222222;
            }
            header, main {
                width: 800px;
                margin: auto;
                background-color: white;
                padding: 10px;
            }
            .calc {
                whidth: 300px;
                display: flex;

            }
        </style>
</head>
<body>
    <header>
        <h1>Test dev wev</h1>

    </header>
    <main>
    <article>

    <h2>Formulaire nom</h2>

        <p>Apportez toutes les corrections nécessaires pour que ce code fonctionne et soit le plus propre.</p>

        <p>Bonjour, <?= $name ?? '' ?><p>
        <form method="POST">
            <div>
                <label for="name">Votre nom : </label>
            <input type="text" id="name" name="name" />

        </div>
        <button>Envoyer</button>
        </form>

    <h2>Calulatrice</h2>    

        <input type="text" name="op1" id="op1"/>
        <input type="text" name="op2" id="op2"/>
        <button class="op" data-op="add">+</button><button class="op" data-op="sub">-</button><button class="op" data-op="div">/</button><button class="op" data-op="add">*</button>

        <div id="calc" ></div>

    </article>
    </main>
<script type="application/javascript">


const list = document.getElementsByClassName('op');

for (let i=0; i<list.length; i++) {
    list[i].addEventListener("click", calcul);
}

function calcul(e) {
    e.preventDefault();
    const op = e.target.dataset.op;
    const number1 = document.getElementById('op1').value
    const number2 = document.getElementById('op2').value

    let text = '';

    switch(op) {
    case 'add':
         result = number1 + number2;
       text = (`${number1} + ${number2} = ${result}`);
        break;

    case 'sub':
         result = number1 - number2;
         text =(`${number1} - ${number2} = ${result}`);
        break;

    case 'mul':
         result = number1 * number2;
         text = (`${number1} * ${number2} = ${result}`);
        break;

    case 'div':
         result = number1 / number2;
         text = (`${number1} / ${number2} = ${result}`);
        break;

    default:
        text = ('Invalid operator');
        break;
    }

    document.getElementById('calc').innerHTML = text;

}
</script>
</body>
</html>