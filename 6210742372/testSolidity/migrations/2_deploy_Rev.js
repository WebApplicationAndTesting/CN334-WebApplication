const ReceiveEther = artifacts.require("ReceiveEther");
module.exports = function(deployer) {
  deployer.deploy(ReceiveEther);
};