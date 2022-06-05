const value = name => {
    // return input value
    return document.querySelector(`[name="${name}"]`).value
}

const reset = () => {
    // clear form inputs
    document.querySelector('form').reset()
}

const check = () => {
    const form = document.querySelector('form')
    if(form.checkValidity()) {
        // return true if form is valid
        return true
    } else {
        // show warnings if form is not valid
        form.reportValidity()
        // return false
        return false
    }
}

const login = () => {
    // return if not valid
    if(check() === false) { return }
    // get login info
    const username = value('name')
    const password = value('password')
    // clear form
    reset()
    // login request
    fetch('database/user_login.php', {
        method : 'post',
        body : JSON.stringify({
            name : username, password : password
        })
    }).then(resp => resp.json()).then(json => {
        if(json.success) {
            // navigate to home page
            location = 'home.php'
        } else {
            // show error message
            alert(json.message)
        }
    })
}

const register = () => {
    // return if not valid
    if(check() === false) { return }
    // get login info
    const fname = value('fname')
    const lname = value('lname')
    const age = value('age')
    const email = value('email')
    const contact = value('contact')
    // clear form
    reset()
    // registration request
    fetch('database/register.php', {
        method : 'post',
        body : JSON.stringify({
            fname : fname,
            lname : lname,
            age : age,
            email : email,
            contact : contact
        })
    }).then(resp => resp.json()).then(json => {
        // show registration message
        alert(json.message)
    })
}

const loadDetails = (selected = false) => {
    // select url
    const url = selected ? "database/get_info?selected" : "database/get_info"
    // request details
    fetch(url).then(resp => resp.json()).then(json => {
        json.forEach(item => {
            const tr = document.createElement('tr')
            Object.values(item).forEach(value => {
                const td = document.createElement('td')
                td.innerHTML = value
                tr.appendChild(td)
                document.querySelector('table > tbody').appendChild(tr)
            })
        })
    })
}