

function generateMemberForm(selectObject) {

    document.getElementById("memberWrapper").innerHTML = "";

    var html = [
        '<div id="mb">',
        '<!-- Firstname Lastname -->',
        '<div class="form-row member">',
        '<div class="col lft_col">',
        '<!-- First name -->',
        '<input type="text" id="defaultIDName" class="form-control" placeholder="Prénom">',
        '</div>',
        '<div class="col rgt_col">',
        '<!-- Last name -->',
        '<input type="text" id="defaultIDLastname" class="form-control" placeholder="Nom">',
        '</div>',
        '</div>',
        '</div>'
    ].join("\n");

    var optionSelectedValue = selectObject.value;

    for (var i = 1; i <= optionSelectedValue; i++) {
        var identification = "member " + i;
        $("#memberWrapper").append(html);
        document.getElementById("mb").id = identification;
        console.log(identification);
    }
}
