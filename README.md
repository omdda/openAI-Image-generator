# openAI Image generator PHP
* You need an api key [openai.com](openai.com) to use this script

### Basic usage

```PHP
$text = "a white siamese cat";
$generate = generate_image_from_text($text, 2, "1024x1024");

print_r($generate);
```
### Response

```PHP
Array
(
    [0] => Array
        (
            [url] => https://oaidalleapiprodscus.blob.core.windows.net/private/org-5LlJmQB298JanLRLrja4E5NQ/user-QWN9gSRPAymiZXRuNd5aXgjN/img-XHBdj3pHTThURkA3DZIwPBW7.png?st=2023-08-18T14%3A35%3A30Z&se=2023-08-18T16%3A35%3A30Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2023-08-17T17%3A54%3A12Z&ske=2023-08-18T17%3A54%3A12Z&sks=b&skv=2021-08-06&sig=JbCg7kFq9BvF1MTWnh15Vi6RqsMa8zqOlb2Z49IJscQ%3D
        )
    [1] => Array
        (
            [url] => https://oaidalleapiprodscus.blob.core.windows.net/private/org-5LlJmQB298JanLRLrja4E5NQ/user-QWN9gSRPAymiZXRuNd5aXgjN/img-VuvTIwxy0op1xV26P3PeI1Mh.png?st=2023-08-18T14%3A35%3A30Z&se=2023-08-18T16%3A35%3A30Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2023-08-17T17%3A54%3A12Z&ske=2023-08-18T17%3A54%3A12Z&sks=b&skv=2021-08-06&sig=nys6Wh8tB3IvZtSGQpDB6/n5NJNZCKkdAmOPuZWN5kU%3D
        )
)
```

### Usage limits
Read the rates limits on the official documentation : [https://platform.openai.com/docs/guides/rate-limits/overview](https://platform.openai.com/docs/guides/rate-limits/overview)
