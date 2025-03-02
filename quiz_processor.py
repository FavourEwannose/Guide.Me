#!/usr/bin/env python3
import sys
import json

def main():
    # Check that we received three answers
    if len(sys.argv) < 4:
        print(json.dumps({"error": "Not enough answers provided"}))
        return

    # Retrieve answers from command-line arguments
    q1 = sys.argv[1]
    q2 = sys.argv[2]
    q3 = sys.argv[3]

    score = 0

    # Simple scoring logic: add 1 for each 'a' answer.
    if q1.lower() == 'a':
        score += 1
    if q2.lower() == 'a':
        score += 1
    if q3.lower() == 'a':
        score += 1

    # Determine personality result based on the score.
    if score == 3:
        result = "You are independent, creative, and organized!"
    elif score == 2:
        result = "You have a balanced personality with both creative and collaborative traits."
    else:
        result = "You prefer a structured environment and value teamwork."

    # Output the result as JSON.
    output = {
        "score": score,
        "result": result
    }
    print(json.dumps(output))

if __name__ == '__main__':
    main()
