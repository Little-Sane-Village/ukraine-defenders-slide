import { Handler } from "@netlify/functions";
import Stripe from 'stripe';

const stripe = new Stripe(process.env.STRIPE_SECRET_KEY, {
    apiVersion: '2022-08-01',
});

const handler: Handler = async (event, context) => {
    const session = await stripe.checkout.sessions.create({
        cancel_url: `${process.env.URL}/donate`,
        line_items: [{
            price: process.env.PRICE_1,
            quantity: 1,
        }],
        mode: 'payment',
        success_url: `${process.env.URL}/thank-you`,
    });

    return {
        statusCode: 302,
        headers: {
            Location: session.url,
        },
    };
};
export { handler };
