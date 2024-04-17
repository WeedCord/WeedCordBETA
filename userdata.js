// userData array to hold sign-up information
var userData = [
    {
        username: "JohnDoe",
        password: "password123",
        profilePicture: "profile_picture.jpg"
    },
    {
        username: "Admin",
        password: "06584",
        profilePicture: "admin_profile_picture.jpg"
    }
];

// Store user data in localStorage
localStorage.setItem('userData', JSON.stringify(userData));

// Function to update user information
function updateUserInfo(username, password, profilePicture) {
    var userData = JSON.parse(localStorage.getItem('userData'));
    var currentUserIndex = userData.findIndex(user => user.username === username);
    if (currentUserIndex !== -1) {
        userData[currentUserIndex].password = password;
        userData[currentUserIndex].profilePicture = profilePicture;
        localStorage.setItem('userData', JSON.stringify(userData));
        return true; // Updated successfully
    }
    return false; // User not found
}