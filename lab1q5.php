<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <script>
        function isPalindrome(str) {
            str = str.replace(/\s/g, "").toLowerCase(); // Remove spaces and convert to lowercase
            let rev = "";
            for (let i = str.length - 1; i >= 0; i--) {
                rev += str[i];
            }
            return rev === str;
        }

        let str1 = "race car";
        let str2 = "nitin";
        let str3 = "romo";

        if (isPalindrome(str1)) {
            document.write(`<p>${str1} is a palindrome</p>`);
        } else {
            document.write(`<p>${str1} is NOT a palindrome</p>`);
        }

        if (isPalindrome(str2)) {
            document.write(`<p>${str2} is a palindrome</p>`);
        } else {
            document.write(`<p>${str2} is NOT a palindrome</p>`);
        }

        if (isPalindrome(str3)) {
            document.write(`<p>${str3} is a palindrome</p>`);
        } else {
            document.write(`<p>${str3} is NOT a palindrome</p>`);
        }
    </script>
</body>
</html>
