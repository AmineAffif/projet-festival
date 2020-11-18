

function generateMemberForm(selectObject) {

    document.getElementById("memberWrapper").innerHTML = "";

    var html = [
        '<div id="mb">',
        '<!-- Firstname Lastname -->',
        '<div class="form-row member">',
        '<div class="col lft_col">',
        '<!-- First name -->',
        '<input type="text" id="IDFirstName" class="form-control" placeholder="Prénom">',
        '</div>',
        '<div class="col rgt_col">',
        '<!-- Last name -->',
        '<input type="text" id="IDLastName" class="form-control" placeholder="Nom">',
        '<!-- instrument -->',
        '<textarea class="form-control rounded-0" id="instrument" rows="2" placeholder="Instruments..."></textarea>',
        '</div>',
        '</div>',
        '</div>'
    ].join("\n");

    var optionSelectedValue = selectObject.value;

    for (var i = 1; i <= optionSelectedValue; i++) {
        var identificationGlobal = "memberGlobal member" + i;
        var identificationFirstName = "firstnameMember" + i;
        var identificationLastName = "lastnameMember" + i;
        var identificationInstrument = "instrumentMember" + i;
        $("#memberWrapper").append(html);
        document.getElementById("mb").id = identificationGlobal;
        document.getElementById("IDFirstName").id = identificationFirstName;
        document.getElementById("IDLastName").id = identificationLastName;
        document.getElementById("instrument").id = identificationInstrument;
    }
}
