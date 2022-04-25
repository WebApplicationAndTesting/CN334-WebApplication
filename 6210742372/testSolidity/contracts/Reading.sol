// SPDX-License-Identifier: MIT
pragma solidity ^0.8.10;

contract Reading {
    // State variable to store a number
    uint public num;

    // You can read from a state variable without sending a transaction.
    function get() public view returns (uint) {
        return num;
    }
}
