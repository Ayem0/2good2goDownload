<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/wordle_styles.css">
    <title>Wordle Clone</title>
</head>
<body>
    <div class="header">
        <h1 class="title">Worlde Clone</h1>
        <div class="header-container">
            <button class="ruleButton" onclick="openDialog('ruleDialog')">?</button>
            <button class="settingsButton" onclick="openDialog('settingsDialog')"><img class="settins-img" src="assets/img/icons8-settings-50.png" alt=""></button>
        </div>
    </div>
    <dialog id="ruleDialog">
        <div class="dialog-container">
            <button class="closeButton" onclick="closeDialog('ruleDialog')"><img src="assets/img/cross.png" alt=""></button>
            <div class="rule-title">How To Play</div>
            <div class="dialog-sub-container">
                <div class="rule-subtitle">Guess the Wordle in 6 tries.
                    <ul>
                        <li><span class="rule-text">Each guess must a be valid word.</span></li>
                        <li><span class="rule-text">The color of the tiles will change to show how close your guess was to the word.</span></li>
                    </ul>
                    <div class="rule-subtitle">Examples</div>
                    <table class="table-example">
                        <tr><td class="example-td-correct">W</td><td class="example-td">E</td><td class="example-td">A</td><td class="example-td">R</td><td class="example-td">Y</td></tr>
                    </table>
                    <span class="rule-text"><span class="rule-text bold">W</span> is in the word and in the correct spot.</span>
                    <table class="table-example">
                        <tr><td class="example-td">P</td><td class="example-td-present">I</td><td class="example-td">L</td><td class="example-td">L</td><td class="example-td">S</td></tr>
                    </table>
                    <span class="rule-text"><span class="rule-text bold">I</span> is in the word but in the wrong spot.</span>
                    <table class="table-example">
                        <tr><td class="example-td">V</td><td class="example-td">A</td><td class="example-td">G</td><td class="example-td-absent">U</td><td class="example-td">E</td></tr>
                    </table>
                    <span class="rule-text"><span class="rule-text bold">U</span> is not in the word in any spot.</span>
                </div>
            </div>
        </div>
    </dialog>
    <dialog id="settingsDialog">
        <div class="dialog-container">
            <button class="closeButton" onclick="closeDialog('settingsDialog')"><img src="assets/img/cross.png" alt=""></button>
            <div class="rule-title">Settings</div>
            <div class="dialog-sub-first-container">
                <div class="rule-subtitle">Keyboard</div>
                <div class="btn-container">
                    <button id="button-azerty" class="selected" onclick="keyboardAzerty()">AZERTY</button>
                    <button id="button-qwerty" class="unselected" onclick="keyboardQwerty()">QWERTY</button>
                </div>
            </div>
            <div class="dialog-sub-first-container">
                <div class="rule-subtitle">Feedback</div>
                <span class="rule-text">baptiste.genin1@gmail.com</span>
            </div>
            <div class="dialog-sub-first-container">
                <div class="rule-subtitle">Report a Bug</div>
                <span class="rule-text">baptiste.genin1@gmail.com</span>
            </div>
            <div class="dialog-sub-container">
                <div class="rule-title">Credits</div>
                <span class="rule-text">Game developped by Genin Baptiste.</span>
                <br>
                <span class="rule-text">Game is built in Javascript.</span>
                <br>
                <span class="rule-text">Inspired by <a href="https://www.nytimes.com/games/wordle/index.html">Wordle</a>.</span>
            </div>
        </div>
    </dialog>
    <div id="alert" class="alert">
    </div>
    <div id="table">
    </div>
    <div id="keyboard-azerty" class="keyboard-azerty">
        <div class="row">
            <button class="key" data-key="A" onclick="insertCell('A')">A</button>
            <button class="key" data-key="Z" onclick="insertCell('Z')">Z</button>
            <button class="key" data-key="E" onclick="insertCell('E')">E</button>
            <button class="key" data-key="R" onclick="insertCell('R')">R</button>
            <button class="key" data-key="T" onclick="insertCell('T')">T</button>
            <button class="key" data-key="Y" onclick="insertCell('Y')">Y</button>
            <button class="key" data-key="U" onclick="insertCell('U')">U</button>
            <button class="key" data-key="I" onclick="insertCell('I')">I</button>
            <button class="key" data-key="O" onclick="insertCell('O')">O</button>
            <button class="key" data-key="P" onclick="insertCell('P')">P</button>
        </div>
        <div class="row">
            <button class="key" data-key="Q" onclick="insertCell('Q')">Q</button>
            <button class="key" data-key="S" onclick="insertCell('S')">S</button>
            <button class="key" data-key="D" onclick="insertCell('D')">D</button>
            <button class="key" data-key="F" onclick="insertCell('F')">F</button>
            <button class="key" data-key="G" onclick="insertCell('G')">G</button>
            <button class="key" data-key="H" onclick="insertCell('H')">H</button>
            <button class="key" data-key="J" onclick="insertCell('J')">J</button>
            <button class="key" data-key="K" onclick="insertCell('K')">K</button>
            <button class="key" data-key="L" onclick="insertCell('L')">L</button>
            <button class="key" data-key="M" onclick="insertCell('M')">M</button>
        </div>
        <div class="row">
            <button class="key-delete" onclick="deleteCell()"><img class="delete-img" src="assets/img/icons8-backspace-50.png" alt=""></button>
            <button class="key" data-key="W" onclick="insertCell('W')">W</button>
            <button class="key" data-key="X" onclick="insertCell('X')">X</button>
            <button class="key" data-key="C" onclick="insertCell('C')">C</button>
            <button class="key" data-key="V" onclick="insertCell('V')">V</button>
            <button class="key" data-key="B" onclick="insertCell('B')">B</button>
            <button class="key" data-key="N" onclick="insertCell('N')">N</button>
            <button class="key-validate" onclick="validate()"><img class="enter-img" src="assets/img/icons8-enter-96.png" alt=""></button>
        </div>
    </div>
    <div id="keyboard-qwerty" class="keyboard-qwerty hide">
        <div class="row">
            <button class="key" data-key="Q" onclick="insertCell('Q')">Q</button>
            <button class="key" data-key="W" onclick="insertCell('W')">W</button>
            <button class="key" data-key="E" onclick="insertCell('E')">E</button>
            <button class="key" data-key="R" onclick="insertCell('R')">R</button>
            <button class="key" data-key="T" onclick="insertCell('T')">T</button>
            <button class="key" data-key="Y" onclick="insertCell('Y')">Y</button>
            <button class="key" data-key="U" onclick="insertCell('U')">U</button>
            <button class="key" data-key="I" onclick="insertCell('I')">I</button>
            <button class="key" data-key="O" onclick="insertCell('O')">O</button>
            <button class="key" data-key="P" onclick="insertCell('P')">P</button>
        </div>
        <div class="row">
            <button class="key" data-key="A" onclick="insertCell('A')">A</button>
            <button class="key" data-key="S" onclick="insertCell('S')">S</button>
            <button class="key" data-key="D" onclick="insertCell('D')">D</button>
            <button class="key" data-key="F" onclick="insertCell('F')">F</button>
            <button class="key" data-key="G" onclick="insertCell('G')">G</button>
            <button class="key" data-key="H" onclick="insertCell('H')">H</button>
            <button class="key" data-key="J" onclick="insertCell('J')">J</button>
            <button class="key" data-key="K" onclick="insertCell('K')">K</button>
            <button class="key" data-key="L" onclick="insertCell('L')">L</button>
            
        </div>
        <div class="row">
            <button class="key-delete" onclick="deleteCell()"><img class="delete-img" src="assets/img/icons8-backspace-50.png" alt=""></button>
            <button class="key" data-key="Z" onclick="insertCell('Z')">Z</button>
            <button class="key" data-key="X" onclick="insertCell('X')">X</button>
            <button class="key" data-key="C" onclick="insertCell('C')">C</button>
            <button class="key" data-key="V" onclick="insertCell('V')">V</button>
            <button class="key" data-key="B" onclick="insertCell('B')">B</button>
            <button class="key" data-key="N" onclick="insertCell('N')">N</button>
            <button class="key" data-key="M" onclick="insertCell('M')">M</button>
            <button class="key-validate" onclick="validate()"><img class="enter-img" src="assets/img/icons8-enter-96.png" alt=""></button>
        </div>
    </div>
    <script src="assets/js/wordle_script.js"></script>
</body>
</html>