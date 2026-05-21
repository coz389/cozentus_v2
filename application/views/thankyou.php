<div id="smooth-content">
	<!-- Start Thank You Area -->
	<div class="thank-you-area overflow-hidden default-padding text-center " style="background-image: url('<?= base_url('assets/img/shape/map.png') ?>'); background-position: center; background-repeat: no-repeat; min-height: 80vh; display: flex; align-items: center;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10 col-12">
					<div class="thank-you-card" data-aos="fade-up" data-aos-duration="1000">
						
						<!-- CSS Animated Success Checkmark -->
						<div class="success-checkmark-wrapper">
							<svg class="checkmark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
								<circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" />
								<path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
							</svg>
						</div>

						<h1 class="thank-you-title">Thank You!</h1>
						<p class="thank-you-text">
							Thank you for showing interest in <strong>Cozentus Technologies</strong>.<br>
							We appreciate you taking the time to connect with us. Our global team of experts will review your request and get back to you shortly.
						</p>

						<!-- Back to Home CTA -->
						<div class="cta-wrapper">
							<a href="<?= base_url() ?>" class="btn btn-style-one">
								Get Back to Home <i class="fas fa-arrow-right"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
/* ── Premium Thank You Styling ── */
.thank-you-area {
	background-color: #f8fafc;
	padding: 100px 0;
}

.thank-you-card {
	background: #ffffff;
	border: 1px solid rgba(10, 38, 112, 0.08);
	border-radius: 20px;
	padding: 60px 40px;
	box-shadow: 0 15px 50px rgba(10, 38, 112, 0.05);
	position: relative;
	overflow: hidden;
}

.thank-you-title {
	font-family: 'Outfit', sans-serif;
	font-size: 42px;
	font-weight: 700;
	color: #0a2670; /* Brand deep blue */
	margin-bottom: 20px;
	margin-top: 10px;
}

.thank-you-text {
	font-size: 16px;
	line-height: 1.6;
	color: #64748b;
	max-width: 600px;
	margin: 0 auto 40px;
}

/* ── Interactive Success SVG Animation ── */
.success-checkmark-wrapper {
	margin-bottom: 25px;
}

.checkmark-svg {
	width: 80px;
	height: 80px;
	border-radius: 50%;
	display: block;
	stroke-width: 2.5;
	stroke: #2ecc71; /* Emerald green check */
	stroke-miterlimit: 10;
	margin: 0 auto;
	box-shadow: inset 0px 0px 0px rgba(46, 204, 113, 0.2);
	animation: checkmark-fill .4s ease-in-out .4s forwards, checkmark-scale .3s ease-in-out .9s forwards;
}

.checkmark-circle {
	stroke-dasharray: 166;
	stroke-dashoffset: 166;
	stroke-width: 2.5;
	stroke-miterlimit: 10;
	stroke: #2ecc71;
	fill: none;
	animation: checkmark-stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark-check {
	transform-origin: 50% 50%;
	stroke-dasharray: 48;
	stroke-dashoffset: 48;
	animation: checkmark-stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes checkmark-stroke {
	100% {
		stroke-dashoffset: 0;
	}
}

@keyframes checkmark-scale {
	0%, 100% {
		transform: none;
	}
	50% {
		transform: scale3d(1.15, 1.15, 1);
	}
}

@keyframes checkmark-fill {
	100% {
		box-shadow: inset 0px 0px 0px 45px rgba(46, 204, 113, 0.1);
	}
}

/* ── Progress Timeline ── */
.timeline-wrapper {
	background: #fdfdfe;
	border: 1px dashed rgba(10, 38, 112, 0.15);
	border-radius: 12px;
	padding: 30px;
	margin-bottom: 45px;
	text-align: left;
}

.timeline-title {
	font-family: 'Outfit', sans-serif;
	font-size: 18px;
	font-weight: 600;
	color: #0a2670;
	margin-bottom: 25px;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	text-align: center;
}

.timeline-items {
	display: flex;
	justify-content: space-between;
	position: relative;
	gap: 20px;
}

/* Connector Line */
.timeline-items::before {
	content: '';
	position: absolute;
	top: 20px;
	left: 40px;
	right: 40px;
	height: 2px;
	background: #e2e8f0;
	z-index: 1;
}

.timeline-item {
	flex: 1;
	text-align: center;
	position: relative;
	z-index: 2;
}

.timeline-icon {
	width: 42px;
	height: 42px;
	border-radius: 50%;
	background: #ffffff;
	border: 2px solid #cbd5e1;
	color: #94a3b8;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 16px;
	margin: 0 auto 15px;
	transition: all 0.3s ease;
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
}

.timeline-item.active .timeline-icon {
	border-color: #2ecc71;
	color: #2ecc71;
	background: rgba(46, 204, 113, 0.05);
	box-shadow: 0 0 12px rgba(46, 204, 113, 0.15);
}

/* Make second item blue (active state in progress) */
.timeline-item:nth-child(2) .timeline-icon {
	border-color: #0a2670;
	color: #0a2670;
	background: rgba(10, 38, 112, 0.02);
}

.timeline-content h5 {
	font-size: 15px;
	font-weight: 600;
	color: #1e293b;
	margin-bottom: 8px;
}

.timeline-content p {
	font-size: 13px;
	color: #64748b;
	line-height: 1.4;
	margin: 0;
}

.cta-wrapper .btn-style-one {
	padding: 14px 35px;
	font-size: 15px;
	font-weight: 600;
	border-radius: 50px;
	text-transform: capitalize;
}

/* ── Responsive Styling ── */
@media (max-width: 768px) {
	.thank-you-card {
		padding: 40px 20px;
	}
	.thank-you-title {
		font-size: 32px;
	}
	.timeline-items {
		flex-direction: column;
		gap: 30px;
	}
	.timeline-items::before {
		display: none; /* Hide horizontal connector on mobile */
	}
	.timeline-item {
		text-align: left;
		display: flex;
		align-items: flex-start;
		gap: 15px;
	}
	.timeline-icon {
		margin: 0;
		flex-shrink: 0;
	}
	.timeline-content {
		text-align: left;
	}
}
</style>