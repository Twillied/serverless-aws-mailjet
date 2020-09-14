# Serverless-AWS-Mailjet
### Creates an AWS Lambda function via Serverless which sends an email with the Mailjet API

- Uses the bref plugin to create a PHP runtime through the AWS lambda layers feature.
- Since PHP is not a native lambda option, the bref plugin allows PHP devs to use their scripts in lambdas.  
- Uses the AWS SSM feature to import the Mailjet API keys as environment variables.

[bref - Serverless PHP](https://bref.sh/)
