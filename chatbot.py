def chatbot():
    print("Hello! I'm a simple chatbot. Type 'bye' to exit.")
    
    while True:
        user_input = input("You: ").lower()
        
        if user_input == "bye":
            print("Chatbot: Goodbye! Have a great day!")
            break
        elif "hello" in user_input:
            print("Chatbot: Hi there! How can I help you?")
        elif "how are you" in user_input:
            print("Chatbot: I'm just a program, but I'm doing well! How about you?")
        elif "your name" in user_input:
            print("Chatbot: I'm a simple chatbot created with Python.")
        else:
            print("Chatbot: I'm not sure how to respond to that.")

# Run the chatbot
chatbot()