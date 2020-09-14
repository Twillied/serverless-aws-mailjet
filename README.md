# Serverless-AWS-Mailjet
### Creates an AWS Lambda function via Serverless which sends an email with the Mailjet API

- Uses the bref plugin to create a PHP runtime through the AWS lambda layers feature.  [bref - Serverless PHP](https://bref.sh/)
- Since PHP is not a native lambda option, the bref plugin allows PHP devs to use their scripts in lambdas.   [AWS Lambdas](https://docs.aws.amazon.com/lambda/latest/dg/welcome.html)
- Uses the AWS SSM feature to import the Mailjet API keys as environment variables.   [AWS SSM](https://docs.aws.amazon.com/systems-manager/latest/userguide/systems-manager-parameter-store.html)
