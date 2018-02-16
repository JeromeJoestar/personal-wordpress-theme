//Function to check if a certain condition is met before executing code
function whenAvailable(name, callback) {
    var maxTime = 500;
    var interval = 10; // ms

    window.setTimeout(function () {
        if (name) {
            callback();
        } else {
            if(maxTime-interval > 0){
            }
        }
    }, interval);
}