
<?php 
if($_POST){
    print_r($_POST);die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="members[0][name]" id="">
        <label for="">bannana</label>
        <input type="checkbox" name="members[0][fruits][]" value="bannana" id="">
        <label for="">apple</label>
        <input type="checkbox" name="members[0][fruits][]" value="apple" id="">
        <label for="">blueberry</label>
        <input type="checkbox" name="members[0][fruits][]" value="blueberry" id="">
        <br>
        <input type="text" name="members[1][name]" id="">
        <label for="">bannana</label>
        <input type="checkbox" name="members[1][fruits][]" value="bannana" id="">
        <label for="">apple</label>
        <input type="checkbox" name="members[1][fruits][]" value="apple" id="">
        <label for="">blueberry</label>
        <input type="checkbox" name="members[1][fruits][]" value="blueberry" id="">
        <button type="submit"> click </button>
    </form>
</body>
</html>
<?php 
[
    'memebers'=>[
        [
            'name'=>'galal',
            'fruits'=>[
                'bannana','apple'
            ]
        ],[
            'name'=>'mina',
            'fruits'=>[
                'apple'
            ]
        ]
    ]
]
?>