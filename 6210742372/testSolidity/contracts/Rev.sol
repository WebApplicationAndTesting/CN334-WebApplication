// SPDX-License-Identifier: MIT
pragma solidity ^0.8.10;

contract ReceiveEther {
    event Received(address, uint);
    receive() external payable {
        emit Received(msg.sender, msg.value);
    }

    fallback() external payable {
    }

    function getBalance() public view returns (uint) {
        return address(this).balance;
    }
}

contract SendEther {
    function sendViaTransfer(address payable _to) public payable {
        _to.transfer(msg.value);
    }

    function sendViaSend(address payable _to) public payable {
        bool sent = _to.send(msg.value);
        require(sent, "Failed to send Ether");
    }
    //instance.sendCoin(accounts[1],{from: accounts[0], value:})

    function sendViaCall(address payable _to) public payable {
        (bool sent, bytes memory data) = _to.call{value: msg.value}("");
        require(sent, "Failed to send Ether");
    }
}
