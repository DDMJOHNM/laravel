<h1>Send Message</h1>

        <section>
            <form method="POST" action="/sendmessage">
                @csrf
                <header>
                    <textarea placeholder="Comment here" rows="5" cols="30" name="body">

                    </textarea>
                </header>
                <button type="submit">Send</button>
            </form>
        </section>

