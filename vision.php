
if(isset($_FILES[’image'])) {
// rename with extension
$extension = preg_replace(” /^.*?\. /”, ” ”, $_FILES[’image’ ] [ 'name']);
rename($_FILES [’image’] [’tmp-name'], $_FILES[’image’ ] [‘ timp_name’). ”. ”.. $extension);
// set json content type
header('Content-Type: application/json');
// just exec using curl
echo exec('curl-X POST --header "Prediction-Key:f3cabe07e84f498ca961494f3d333e00" --header "Content-Type: application/octet-stream” --data-binary ”@” . $_FILES[‘image’ ] [ ‘tmp_name’ ] . ‘ .. ‘ . $extension. ” ”https://southcentralus.api.cognitive.microsoft.com/customvision/v1.0/Prediction/04749dd5-0f24-41b8-a093-194cbf307477/image"');
}
