let submit = GetElementById("captcha-submit");

function DisableSubmit() {
    submit.disabled = true;
}

function ButtonIsDisabled(Element) {
    return Element.disabled ? true : false;
}

function EnableSubmit() {
    if (ButtonIsDisabled(submit))
        submit.disabled = false;
}

DisableSubmit();