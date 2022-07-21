# Play-to-Save_Offramp-and-Transfer-Out
Usiku Games - 2022 - Kenya
Distributed Open-Source under BSD License

This module is a part of the Usiku Games Blockchain #GamingForGood platform. 

The routine allows players to convert the stable coins that they have won while playing games on the platform, and transfer them into their long-term FIAT accounts with our social impact partners.

These include:
  - Health Insurance and Savings accounts
  - Education Fees
  - Agiculture Crop Insurance
  - Interest bearing savings accounts

## Features:
  - Seek player input on amount to transfer and selected impact partner
  - Confirm player account details at the impact partner (eg: Your NHIF Account details)
  - Trigger off-ramp transaction from crypto to FIAT currency (eg: Kenya Shillings)
  - Trigger m-pesa mobile money payment to impact partner
  - Confirm transaction completion
  - Burn matching amount of stable coins from the system
  - Report confirmation to player
  
## Tech Stack

**Client:** HTML,JS

**Server:** PHP


## Functionality
- Get user details from the client and send them to the backend via hmtl form.
- The backend shoud get user details from the frontend and process them 
  and make payments via the honey coin API.


Watch a DEMO video of this module at: https://www.youtube.com/watch?v=cSZ8Mjbp1ss

We believe this component can be of value to many crypto-hybrid social impact platforms in the future, allowing the projects to take a selected amount of off-chain stable coins (used as currency within the project for incentivizing beneficiaries) and convert them into real-world FIAT, transferred to a select destination.

Although we do not allow this (for security reasons) the same module could be used to transfer the FIAT directly to the beneficiary for a UBI or "xxxx-to-earn" type system.

For any questions about this module, please contact Usiku Games in Kenya, or via GitHub message.

Find out more about our play-to-save Blockchain #GamingForGood project at: www.usiku.io

Please find the full whitepaper for the project here: https://docs.google.com/presentation/d/1g220kaIb-NN-55KB76gx20LH2dxjE4C6TQjr5_S1l7c/edit?usp=sharing

To learn about other innovative Blockchain-based social impact projects around the world, please check out the great work being funded by:
     UNICEF Innovation Fund
     https://www.unicefinnovationfund.org/apply/blockchain-startups
