@extends('registered.base')

{{-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - attēlo medību biedrībai piederošo ekipējumu sarakstu
 - - - - - - - - - - - --}}

@section('moduleStyle')

.inventoryType {
    position: relative;
    border: 2px solid var(--logo-fur-dark);
    border-radius: 25px;
    margin: 30px 15px;
    padding: 0 20px;
    display: grid;
}
    .inventoryType > div {
        padding: 0;
        display: grid;
        grid-template-columns: 150px auto 80px 75px;
        align-items: center;
        text-align: center;
        border-bottom: 1px dashed var(--logo-fur-light);
    }
    .inventoryType > div:last-child { border: 0; }

.inventoryType > div > .invName { font-weight: bold; }
.inventoryType > div > .invAmount { font-style: italic; }

.empty { display: none!important; }

/* Piešķir visiem lietu konteineriem virsrakstus */
.inventoryType::before {
    font-family: "Montserrat Alternates", sans-serif;
    position: absolute;
    margin-top: -13px;
    padding: 0 5px;
    margin-left: 20px;
    background: #fff;
}
    #inventoryEquip::before { content: 'Ekipējums'; }
    #inventoryTech::before { content: 'Tehnika'; }
    #inventoryGame::before { content: 'Medījums'; }
    #inventoryBones::before { content: 'Kauli'; }
    #inventoryOther::before { content: 'Cits'; }

/* pievienošanas pogas uz līnijām */
.addButton {
    position: absolute;
    font-size: 20pt;
    top: -21px;
    right: -20px;
    padding: 0px 12px;
}

/* popup pogas izkārtojums */
#addConfirm { margin: 0 15px 10px; align:right; }

/* Izliekamies, ka notiktu labošana */
.inventoryType > div { min-height: 100px; }
.inventoryType > div > textarea {
    height: 70px;
    text-align: center;
}
    textarea.invName { resize: none; width: 125px; }
    textarea.invDescription { resize: vertical; }
    input.invAmount {
        height:30px;
        width: 60px;
        margin-left:10px;
    }

div.edit {
    padding: 20px 0;
    font-weight:bold;
}
div.editButtons {}
    div.editButtons > button { padding: 5px 15px; }
    div.editButtons > button:first-child { margin-bottom: 5px; }
    div.editButtons > .editUpdate {  }
    div.editButtons > .editConfirm { background-color:orange;color:var(--logo-outline); padding: 5px 12px; }
    div.editButtons > .editRemove, div.editButtons > .editCancel { color:var(--logo-outline); }
    div.editButtons > .editRemove { background-color:tomato; }
    div.editButtons > .editCancel { background-color: var(--logo-fur-light); }
@endsection

@section('moduleTitle')
Inventārs
@endsection

@section('moduleContent')
    {{-- Moduļa galvenā satura sadaļa --}}
<div id="inventoryWrapper">
    <div id="inventoryEquip" class="inventoryType">
        <button id="addEquip" class="w3-button w3-circle addButton">+</button>
        <div id="inv1">
            <p class="invName">Kombinzons (rudens)</p>
            <p class="invDescription">Rudens medību kombinzons; izskaties itkā būtu lapu čupa</p>
            <p class="invAmount">5 gab.</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryTech" class="inventoryType">
        <button id="addTech" class="w3-button w3-circle addButton">+</button>
        <div id="inv4">
            <p class="invName">Piekabe (skārda)</p>
            <p class="invDescription">Tā prastā piekabe bez jumta kur samest liekos štruntus kurus nav bail atstāt brīvā gaisā</p>
            <p class="invAmount">1 gab.</p><div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv5">
            <p class="invName">Piekabe (sarkanā)</p>
            <p class="invDescription">Piekabe ar jumtu, kur parasti liekam uzšķērstos dzīvniekus no medībām</p>
            <p class="invAmount">1 gab.</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv6">
            <p class="invName">Saldētava</p>
            <p class="invDescription">Guļamkastes ko Dāvids paķēra pa lēto izsolē; paturam tajā pārdodamos gaļas gabalus</p>
            <p class="invAmount">3 gab.</p><div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>
    
    <div id="inventoryGame" class="inventoryType">
        <button id="addGame" class="w3-button w3-circle addButton"
        onclick="document.getElementById('inventoryAdd').style.display='block'">+</button>
        <div id="inv7">
            <p class="invName">Brieža ciska</p>
            <p class="invDescription">Brieža ciska kas brieža ciska</p>
            <p class="invAmount">8 gab.</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv8">
            <p class="invName">Zaķa āda</p>
            <p class="invDescription">Nodīrāta zaķa āda. Apstrādāta tikai tik tālu ka visa gaļa no tās nokasīta. Nekādu caurumu nav.</p>
            <p class="invAmount">1 gab.</p><div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv9">
            <p class="invName">Stirnas plauša</p>
            <p class="invDescription">Nav tas smukākais gadījums, bet nav nekādas ložu driskas, tā kādroši var cept pankūku.</p>
            <p class="invAmount">2 gab.</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryBones" class="inventoryType">
        <button id="addBones" class="w3-button w3-circle addButton">+</button>
        <div id="inv10">
            <p class="invName">Brieža ragi</p>
            <p class="invDescription">3 gadus veca buka nomestie ragi ko atradām mežā. Galvaskausa šiem līdzi nebūs</p>
            <p class="invAmount">1 pāris</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
        <div id="inv11">
            <p class="invName">Mežacūkas kāja (ar spalvu)</p>
            <p class="invDescription">Laba lieta ko dot savam suņam grauzt. Sīkas gaļas driskas varbūt pie šīm ir palikušās.</p>
            <p class="invAmount">3 gab.</p>
            <div class="editButtons">
                <button class="editUpdate w3-button w3-round-large">Labot</button>
                <button class="editRemove w3-button w3-round-large">Dzēst</button>
            </div>
        </div>
    </div>

    <div id="inventoryOther" class="inventoryType empty">
        <button id="addOther" class="w3-button w3-circle addButton">+</button>
        <div id="inv13">
            <p class="invName"></p>
            <p class="invDescription"></p>
            <p class="invAmount"></p>
        </div>
        <div id="inv14">
            <p class="invName"></p>
            <p class="invDescription"></p>
            <p class="invAmount"></p>
        </div>
        <div id="inv15">
            <p class="invName"></p>
            <p class="invDescription"></p>
            <p class="invAmount"></p>
        </div>
    </div>

    <!-- Medījuma pievienošanas logs -->
    <div id="inventoryAdd" class="w3-modal">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container">
                <span onclick="document.getElementById('inventoryAdd').style.display='none'"
                      class="w3-button w3-circle addButton w3-display-topright">&times;</span>
                <h2 id="addWhat">Pievienot medījumu</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div class="w3-col m7 l9">
                        <label>Inventāra nosaukums</label>
                        <input id="addName" class="w3-input w3-round-large" type="text" required
                               value="Meža cūkas ribas">
                    </div>
                    <div class="w3-col m3 l2">
                        <label>Daudzums</label>
                        <input id="addAmount" class="w3-input w3-round-large" type="number" required
                               value="15">
                    </div>
                    <div class="w3-col m2 l1">
                        <label>Mērs</label>
                        <select id="addMeasure" class="w3-select w3-round-large" name="option" required>
                            <option value="" disabled selected>Mērs</option>
                            <option value="gab">gab.</option>
                            <option value="kg">kg</option>
                            <option value="l">l</option>
                        </select>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-col">
                        <label>Inventāra apraksts</label>
                        <textarea id="addDescription" class="w3-input w3-round-large" style="resize:none">Viena vai divas var būt lauztas</textarea>
                    </div>
                </div>
                
                    <a id="addConfirm" class="w3-button w3-round-large" href="#">Pievienot jaunu inventāru</a>
            </div>
            <footer class="w3-container">
                <p>Palīgteksts atrodas šeit</p>
            </footer>
        </div>
    </div>
</div>
@endsection

@section('moduleScripts')
    // Inventāra pievienošanas popups (tikai medījumam pieslēgts)
    var modal = document.getElementById('inventoryAdd');
@endsection