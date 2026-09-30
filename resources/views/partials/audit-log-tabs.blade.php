<style>
    .audit-log-tabs .nav-link {
        background: #ffffff;
        border: 1px solid #d7e6f7;
        color: #0a326c;
        font-weight: 500;
    }

    .audit-log-tabs .nav-link:hover,
    .audit-log-tabs .nav-link:focus {
        background: #e8f0fe;
        border-color: #b8d4f0;
        color: #0a326c;
    }

    .audit-log-tabs .nav-link.active,
    .audit-log-tabs .nav-link.active:hover,
    .audit-log-tabs .nav-link.active:focus {
        background: #0877ed;
        border-color: #0877ed;
        color: #ffffff;
    }
</style>

<ul class="nav nav-pills gap-2 mb-3 audit-log-tabs" aria-label="Audit log type">
    <li class="nav-item">
        <a class="nav-link {{ $active === 'staff' ? 'active' : '' }}" href="{{ route('admin.audit-logs') }}" @if ($active === 'staff') aria-current="page" @endif>
            <i class="bi bi-person-badge-fill" aria-hidden="true"></i> Staff activity
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ $active === 'patients' ? 'active' : '' }}" href="{{ route('admin.audit-logs', ['type' => 'patients']) }}" @if ($active === 'patients') aria-current="page" @endif>
            <i class="bi bi-people-fill" aria-hidden="true"></i> Patient logins
        </a>
    </li>
</ul>