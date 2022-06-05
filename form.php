<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="source/index.js"></script>
    <link rel="stylesheet" href="source/form.css">
</head>
<body>
    <h2 align="center">Enter your details</h2>
    <form>
        <table border="0" width="400">
            <tr>
                <td>First Name :</td>
                <td>
                    <input
                        required
                        type="text"
                        name="fname"
                    >
                </td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td>
                    <input
                        required
                        type="text"
                        name="lname"
                    >
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                <td>
                    <input
                        required
                        type="number"
                        name="age"
                        min="18"
                    >
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input
                        required
                        type="text"
                        name="email"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                        oninvalid="this.setCustomValidity('Please enter valid email address')"
                        oninput="this.setCustomValidity('')"
                    >
                </td>
            </tr>
            <tr>
                <td>Contact No :</td>
                <td>
                    <input
                        required
                        type="text"
                        name="contact"
                        pattern="^(?:7|0|(?:\+94))[0-9]{9,10}"
                        oninvalid="this.setCustomValidity('Please enter valid mobile number')"
                        oninput="this.setCustomValidity('')"
                    >
                </td>
            </tr>
        </table>
        <button onclick="register()">Submit</button>
        <button onclick="reset()">Clear</button>
    </form>
</body>
</html>